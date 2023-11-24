document.addEventListener('DOMContentLoaded', function () {
    const manageSwitch = document.querySelector('.switch');

    manageSwitch.addEventListener('click', function () {
        const innerCircle = document.querySelector('.inner-cicle');
        innerCircle.classList.toggle('on');

        const paragraphElement = innerCircle.querySelector('p');
        const manageButtons = document.querySelector('.manageButton');

        if (innerCircle.classList.contains('on')) {
            paragraphElement.innerText = 'On';
            document.querySelector('.manageButton').classList.add('show');
        } else {
            paragraphElement.innerText = 'Off';
            document.querySelector('.manageButton').classList.remove('show');
        }
    });



});