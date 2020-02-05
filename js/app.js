var swiper = new Swiper('.swiper-container', {
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
});

function alertSuccess() {
    let userEmail = document.querySelector('#userEmail').value,
        symbolAt = false;
    if (userEmail === '') {
        alert('Поле пустое!');
    } else {
        let i,k;
        for (i = 0; i < userEmail.length; i++) {
            if (userEmail[i] === '@') {
                symbolAt = true;
              k=i;
            }
            if (userEmail[k+1] === undefined){
                symbolAt = false;
            }
        }
        if (symbolAt)
        {
            alert('Поздравляем!\nТеперь вы официально стали частью сообщества пользователей Capture!')
    }
        else{
            alert('Некорректный email!')
        }
    }
}


