function variationFormToggle() {
    const variationsItem = document.querySelectorAll('.variations__item');
    const firstButton = document.querySelector('.variation-first');
    const secondButton = document.querySelector('.variation-second');
    const thirdButton = document.querySelector('.variation-third');
    const singleAddToCartButton = document.querySelector('.single_add_to_cart_button');
    const addToCartDiv = document.querySelector('.ct-cart-actions');
    let nextButton = document.querySelector('.next-vars');

    if (variationsItem.length <= 4) {
        firstButton.style.display = 'none';
        nextButton.style.display = 'none';
        singleAddToCartButton.classList.remove('disabled');
        for (let i = 0; i < 4; i++) {
            variationsItem[i].classList.add('active');
        }
    }
    if (variationsItem.length > 4 && variationsItem.length < 10)  {
        for (let i = 0; i < 4; i++) {
            variationsItem[i].classList.add('active');
        }
        nextButton.addEventListener('click', () => {
            singleAddToCartButton.classList.remove('disabled');
            nextButton.style.display = 'none';
            if (firstButton.classList.contains('active')) {
                firstButton.classList.remove('active');
                secondButton.classList.add('active');

                for (let i = 0; i < 4; i++) {
                    variationsItem[i].classList.remove('active');
                }
                for (let i = 4; i < 10; i++) {
                    variationsItem[i].classList.add('active');
                }
            }

        });
        firstButton.addEventListener('click', () => {
            singleAddToCartButton.classList.add('disabled');
            nextButton.style.display = 'block';
            for (let i = 0; i < 4; i++) {
                variationsItem[i].classList.add('active');
            }
            for (let i = 4; i < 10; i++) {
                variationsItem[i].classList.remove('active');
            }
        });
        secondButton.addEventListener('click', () => {
            singleAddToCartButton.classList.remove('disabled');
            nextButton.style.display = 'none';
            for (let i = 0; i < 4; i++) {
                variationsItem[i].classList.remove('active');
            }
            for (let i = 4; i < 10; i++) {
                variationsItem[i].classList.add('active');
            }
        });
    }
    if (variationsItem.length >= 10) {
        singleAddToCartButton.classList.add('disabled');

        for (let i = 0; i < 4; i++) {
            variationsItem[i].classList.add('active');
        }
        nextButton.addEventListener('click', () => {
            if (firstButton.classList.contains('active')) {
                firstButton.classList.remove('active');
                secondButton.classList.add('active');
                thirdButton.classList.remove('active');

                for (let i = 0; i < 3; i++) {
                    variationsItem[i].classList.remove('active');
                }
                for (let i = 3; i < 10; i++) {
                    variationsItem[i].classList.add('active');
                }
            } else if (secondButton.classList.contains('active')) {
                firstButton.classList.remove('active');
                if (variationsItem.length > 10) {
                    secondButton.classList.remove('active');
                    thirdButton.classList.add('active');
                }
                for (let i = 4; i < 10; i++) {
                    if (variationsItem) {
                        variationsItem[i].classList.remove('active');
                    }
                }
                for (let i = 10; i < 14; i++) {
                    variationsItem[i].classList.add('active');
                }
            }
            if (thirdButton.classList.contains('active')) {
                singleAddToCartButton.classList.remove('disabled');
                nextButton.style.display = 'none';
            }

        });
        firstButton.addEventListener('click', () => {
            singleAddToCartButton.classList.add('disabled');
            nextButton.style.display = 'block';

            firstButton.classList.add('active');
            secondButton.classList.remove('active');
            thirdButton.classList.remove('active');
            for (let i = 0; i < 4; i++) {
                variationsItem[i].classList.add('active');
            }
            for (let i = 4; i < 10; i++) {
                variationsItem[i].classList.remove('active');
            }
            for (let i = 10; i < 20; i++) {
                variationsItem[i].classList.remove('active');
            }
        });
        secondButton.addEventListener('click', () => {

            singleAddToCartButton.classList.add('disabled');
            nextButton.style.display = 'block';

            firstButton.classList.remove('active');
            secondButton.classList.add('active');
            thirdButton.classList.remove('active');
            for (let i = 0; i < 4; i++) {
                variationsItem[i].classList.remove('active');
            }
            for (let i = 4; i < 10; i++) {
                variationsItem[i].classList.add('active');
            }
            for (let i = 10; i < 20; i++) {
                variationsItem[i].classList.remove('active');
            }
        });
        thirdButton.addEventListener('click', () => {
            singleAddToCartButton.classList.remove('disabled');
            nextButton.style.display = 'none';

            firstButton.classList.remove('active');
            secondButton.classList.remove('active');
            thirdButton.classList.add('active');
            for (let i = 4; i < 10; i++) {
                variationsItem[i].classList.remove('active');
            }
            for (let i = 10; i < 14; i++) {
                variationsItem[i].classList.add('active');
            }
            for (let i = 14; i < 20; i++) {
                variationsItem[i].classList.remove('active');

            }
        });
    }

}


document.addEventListener("DOMContentLoaded", () => {
    variationFormToggle();
});