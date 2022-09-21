/*Prehodenie prehravačov*/
let playerOne = document.querySelector('.playerOne');
let playerTwo = document.querySelector('.playerTwo');
let btn = document.querySelectorAll(".btn");
let cat = document.querySelector('.categories');

function changePlayerOne() {
    playerOne.style.display = 'none';
    playerTwo.style.display = 'block';
    btn[0].style.color = 'white';
    btn[1].style.color = '#e96565';
}

function changePlayerTwo() {
    playerTwo.style.display = 'none';
    playerOne.style.display = 'block';
    btn[1].style.color = 'white';
    btn[0].style.color = '#e96565';
}

/*Index page change*/
let naj = document.querySelector('.blockNew');
let popular = document.querySelector('.popular');
let csfd = document.querySelector('.csfd');
function indexChangeNaj() {
        let li = document.querySelectorAll('.li');
        popular.style.display = 'none';
        csfd.style.display = 'none';
        cat.style.display = 'none';
        naj.style.display = 'flex';
        li[0].style.color = '#e96565';
        li[0].style.textShadow = '#e48f8f 0 0 10px';
        li[1].style.textShadow = 'none';
        li[1].style.color = 'white';
        li[2].style.textShadow = 'none';
        li[2].style.color = 'white';
        li[3].style.textShadow = 'none';
        li[3].style.color = 'white';
}
function indexChangePopular() {
        let li = document.querySelectorAll('.li');
        naj.style.display = 'none';
        cat.style.display = 'none';
        csfd.style.display = 'none';
        popular.style.display = 'flex';
        li[1].style.color = '#e96565';
        li[1].style.textShadow = '#e48f8f 0 0 10px';
        li[0].style.textShadow = 'none';
        li[0].style.color = 'white';
        li[2].style.textShadow = 'none';
        li[2].style.color = 'white';
        li[3].style.textShadow = 'none';
        li[3].style.color = 'white';
}
function indexChangeCsfd() {
    let li = document.querySelectorAll('.li');
    popular.style.display = 'none';
    naj.style.display = 'none';
    cat.style.display = 'none';
    csfd.style.display = 'flex';
    li[2].style.color = '#e96565';
    li[2].style.textShadow = '#e48f8f 0 0 10px';
    li[0].style.textShadow = 'none';
    li[0].style.color = 'white';
    li[1].style.textShadow = 'none';
    li[1].style.color = 'white';
    li[3].style.textShadow = 'none';
    li[3].style.color = 'white';
}
function indexChangeCategories() {
    let li = document.querySelectorAll('.li');
    popular.style.display = 'none';
    csfd.style.display = 'none';
    naj.style.display = 'none';
    cat.style.display = 'flex';
    li[0].style.textShadow = 'none';
    li[0].style.color = 'white';
    li[1].style.textShadow = 'none';
    li[1].style.color = 'white';
    li[2].style.textShadow = 'none';
    li[2].style.color = 'white';
    li[3].style.color = '#e96565';
    li[3].style.textShadow = '#e48f8f 0 0 10px';
}

/*SERIALY*/
/*SHOW EPISODES*/
i = 1;
while (i != 13) {
    let show = [false, false, false, false, false, false, false, false, false, false, false, false, false,];
    function_name = "showEpisodes"+toString(i);
    function_name = function (){
        let query_class = ".episodes"+toString(i)+"-block";
        let episodeBLock = document.querySelector(query_class);
        if (show[i] = false) {
            episodeBLock.style.display = "block";
            show[i] = true;
        }
        else if (show[i] = true) {
            episodeBLock1.style.display = "none";
            show[i] = false;
        }
    }
    i++;
}

