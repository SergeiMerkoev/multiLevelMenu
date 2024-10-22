
/* ------------------------------------------------------------------

Example of getting and creating a multi-level menu. Author S. Merkoev

------------------------------------------------------------------ */

function createMenu(ctxMenu) { // создаём меню на сайте на основе структуры

    const ul = document.createElement('ul');

    for (const [key, value] of Object.entries(ctxMenu)) {

        if (key === '0') { ul.classList.add('menu-item-anim-wrap'); } // класс для анимации появления/скрытия блоков меню

        let li = document.createElement('li');

        li.classList.add('menu-item');

        // ----------------------------------------------------------

        let elem = document.createElement((value.hasOwnProperty("url")) ? 'a' : 'span');

        elem.title = value["title"];

        elem.href = value["url"];

        elem.target = '_blank'; // For testing

        li.appendChild(elem);

        elem.textContent = value["title"];

        // ----------------------------------------------------------

        let knob = document.createElement('span');

        // ----------------------------------------------------------

        if (value.hasOwnProperty("children")) {

            knob.classList.add('mi-knob-plus');

            li.classList.add('mi-parent-open');

            li.appendChild(createMenu(value["children"])); // Рекурсивно добавляем вложенные пункты меню

        } else {

            knob.classList.add('mi-knob-point');

            li.classList.add('mi-child');

        }

        knob.addEventListener('click', function (event) {

            event.stopPropagation();

            if (value.hasOwnProperty("children")) {

                li.classList.toggle('mi-parent-open');
                li.classList.toggle('mi-parent-close');
                li.classList.toggle('open');

                knob.classList.toggle('mi-knob-plus');
                knob.classList.toggle('mi-knob-minus');

            }

        }, { capture: false });

        li.appendChild(knob);

        ul.appendChild(li);

    }

    ul.classList.add('no-select');

    return ul;

}

// ----------------------------------------------

let url = './data/menu.json';

async function getData() { // Получаем данные (структуру меню) с сервера

    let ctxMenu = await fetch(url);

    ctxMenu = await ctxMenu.text();

    if (ctxMenu) { // Проверяем, не пустой ли файл

        ctxMenu = JSON.parse(ctxMenu);

        if (ctxMenu.length) { // Проверяем на наличие объектов (для вывода в меню)

            document.querySelector('#menu-list').appendChild(createMenu(ctxMenu));

        }

    }

}

getData().then(() => {

    console.log('Ок, меню получено. ');

});
