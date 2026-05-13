(function () {
    'use strict';

    var body = document.body;
    var header = document.querySelector('[data-header]');
    var menuButton = document.querySelector('[data-menu-toggle]');
    var mobileNav = document.querySelector('[data-mobile-nav]');
    var leadForm = document.getElementById('leadForm');
    var formStatus = document.getElementById('formStatus');
    var mapNode = document.querySelector('[data-map]');

    if (menuButton && mobileNav) {
        menuButton.addEventListener('click', function () {
            var isOpen = menuButton.getAttribute('aria-expanded') === 'true';
            menuButton.setAttribute('aria-expanded', String(!isOpen));
            mobileNav.classList.toggle('is-open', !isOpen);
            body.classList.toggle('menu-open', !isOpen);
        });

        mobileNav.addEventListener('click', function (event) {
            if (event.target.tagName === 'A') {
                menuButton.setAttribute('aria-expanded', 'false');
                mobileNav.classList.remove('is-open');
                body.classList.remove('menu-open');
            }
        });
    }

    if (header) {
        window.addEventListener('scroll', function () {
            header.classList.toggle('is-scrolled', window.scrollY > 12);
        }, { passive: true });
    }

    var revealItems = document.querySelectorAll('.reveal');
    if ('IntersectionObserver' in window && revealItems.length) {
        var revealObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    revealObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

        revealItems.forEach(function (item) {
            revealObserver.observe(item);
        });
    } else {
        revealItems.forEach(function (item) {
            item.classList.add('is-visible');
        });
    }

    function loadMap() {
        if (!mapNode || mapNode.dataset.loaded === 'true') {
            return;
        }

        var src = mapNode.dataset.mapSrc;
        if (!src) {
            return;
        }

        mapNode.dataset.loaded = 'true';
        mapNode.innerHTML = '';

        var iframe = document.createElement('iframe');
        iframe.src = src;
        iframe.title = 'Карта проезда во Вкругавто на Салтыковской улице, 51';
        iframe.loading = 'lazy';
        iframe.referrerPolicy = 'no-referrer-when-downgrade';
        iframe.allowFullscreen = true;
        mapNode.appendChild(iframe);
    }

    if (mapNode) {
        var mapButton = document.querySelector('[data-load-map]');
        if (mapButton) {
            mapButton.addEventListener('click', loadMap);
        }

        if ('IntersectionObserver' in window) {
            var mapObserver = new IntersectionObserver(function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        loadMap();
                        mapObserver.disconnect();
                    }
                });
            }, { rootMargin: '240px 0px' });
            mapObserver.observe(mapNode);
        }
    }

    var dateInput = document.querySelector('input[name="desired_date"]');
    if (dateInput) {
        var today = new Date();
        var yyyy = today.getFullYear();
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var dd = String(today.getDate()).padStart(2, '0');
        dateInput.min = yyyy + '-' + mm + '-' + dd;
    }

    var phoneInput = document.querySelector('input[name="phone"]');
    if (phoneInput) {
        phoneInput.addEventListener('input', function () {
            var value = phoneInput.value.replace(/[^\d+()\-\s]/g, '');
            if (phoneInput.value !== value) {
                phoneInput.value = value;
            }
            phoneInput.setCustomValidity('');
        });
    }

    function setStatus(message, type) {
        if (!formStatus) {
            return;
        }

        formStatus.textContent = message || '';
        formStatus.classList.remove('is-error', 'is-success');

        if (type) {
            formStatus.classList.add(type === 'success' ? 'is-success' : 'is-error');
        }
    }

    function validateLeadForm(form) {
        var phone = form.elements.phone;
        var consent = form.elements.personal_data_consent;
        var privacy = form.elements.privacy_policy_accept;

        if (phone) {
            var digits = phone.value.replace(/\D/g, '');
            if (digits.length < 10 || digits.length > 15) {
                phone.setCustomValidity('Введите корректный телефон.');
            } else {
                phone.setCustomValidity('');
            }
        }

        if (consent && !consent.checked) {
            consent.setCustomValidity('Нужно дать согласие на обработку персональных данных.');
        } else if (consent) {
            consent.setCustomValidity('');
        }

        if (privacy && !privacy.checked) {
            privacy.setCustomValidity('Нужно подтвердить ознакомление с политикой.');
        } else if (privacy) {
            privacy.setCustomValidity('');
        }

        if (!form.checkValidity()) {
            form.reportValidity();
            var invalid = form.querySelector(':invalid');
            if (invalid && typeof invalid.focus === 'function') {
                invalid.focus({ preventScroll: false });
            }
            return false;
        }

        return true;
    }

    if (leadForm) {
        leadForm.addEventListener('submit', function (event) {
            event.preventDefault();
            setStatus('', null);

            if (!validateLeadForm(leadForm)) {
                setStatus('Проверьте обязательные поля и два согласия.', 'error');
                return;
            }

            var submitButton = leadForm.querySelector('button[type="submit"]');
            var originalText = submitButton ? submitButton.textContent : '';
            var formData = new FormData(leadForm);

            if (submitButton) {
                submitButton.disabled = true;
                submitButton.textContent = 'Отправляем...';
            }

            fetch(leadForm.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
                .then(function (response) {
                    return response.json().catch(function () {
                        throw new Error('Сервер вернул некорректный ответ.');
                    });
                })
                .then(function (data) {
                    if (!data || data.success !== true) {
                        throw new Error(data && data.message ? data.message : 'Не удалось отправить заявку.');
                    }

                    setStatus(data.message || 'Заявка отправлена. Мы свяжемся с вами в ближайшее время.', 'success');
                    leadForm.reset();

                    window.setTimeout(function () {
                        window.location.href = 'thanks.html';
                    }, 900);
                })
                .catch(function (error) {
                    setStatus(error.message || 'Не удалось отправить заявку. Позвоните нам или попробуйте еще раз.', 'error');
                })
                .finally(function () {
                    if (submitButton) {
                        submitButton.disabled = false;
                        submitButton.textContent = originalText;
                    }
                });
        });
    }
})();
