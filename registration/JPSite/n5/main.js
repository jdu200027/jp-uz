import Bdata from './bunpo_data.json' assert {type: 'json'};
data_Outline_Bdata();

function data_Outline_Bdata() {
    const accordion = document.querySelector('.accordion');
    
    for (let i = 0; i < Bdata.length; i++) {
        const accordion_item = document.createElement('div');
        accordion_item.classList.add('accordion-item');

        // Generate unique ids for each accordion item
        const accordionButtonId = `accordion-button-${i}`;
        const accordionCollapseId = `accordion-collapse-${i}`;

        accordion_item.innerHTML = `
            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                data-bs-target="#${accordionCollapseId}">
                ${Bdata[i].grammaTitle}
            </button>
            <div id="${accordionCollapseId}" class="accordion-collapse collapse" data-bs-parent="#n5-bunpo">
                <div class="accordion-body"></div>
            </div>
        `;

        accordion.append(accordion_item);
    }
    
    // Call the function to populate accordion bodies with additional content
    data_Outline_Bdata_bunpo();
}

function data_Outline_Bdata_bunpo() {
    const accordion_bodies = document.querySelectorAll('.accordion-body');
    
    for (let i = 0; i < Bdata.length; i++) {
        const bunpo_content = document.createElement('div');
        bunpo_content.classList.add('bunpo-body');
        
        bunpo_content.innerHTML = `
            <h4 class="text-center">${Bdata[i].grammaTitle}</h4>
            <br>
            <span>意味：</span>
            <span>${Bdata[i].mean}</span>
            <br>
            <span>使い方：</span>
            <span>${Bdata[i].usage}</span>
            <br> <br>
            <p>1. ${Bdata[i].example_1}</p>
            <p>2. ${Bdata[i].example_2}</p>
            <p>3. ${Bdata[i].example_3}</p>
            <div class="iframe d-flex justify-content-center"> 
                <iframe width="560" height="315" src="${Bdata[i].video}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div id="test_yechish"><i><b>Test Yechib ko'ring</b></i>
                <div id="test"></div>
            </div>
        `;

        accordion_bodies[i].append(bunpo_content);
    }
}


import Gdata from "./goi_data.json" assert{type: "json"};

data_Outline_Gdata();

function data_Outline_Gdata(){
    let goi_tab = document.getElementById("profile");
    for(let i =0; i < Gdata.length; i++){
        const ul_tab = document.createElement("ul");
        ul_tab.classList.add("list-group", "list-group-horizontal");
        ul_tab.innerHTML = `
        <li style="width:100%" class="list-group-item">${Gdata[i].Kgoi}</li>
        <li style="width:100%" class="list-group-item">${Gdata[i].Fgoi}</li>
        <li style="width:100%" class="list-group-item">${Gdata[i].Ugoi}</li>
        `;
        goi_tab.appendChild(ul_tab);
    };
};






import Kdata from './kanji_data.json' assert{type: 'json'}
data_Outline_Kdata();

function data_Outline_Kdata(){
    const tab_pane = document.getElementById('contact');
    for(let i = 0; i < Kdata.length; i++){
        const div = document.createElement('div');
        div.innerHTML = `
            <div class="kanji border p-3" style="height:80px">
                <div>${Kdata[i].kanji}</div>
                <span class = "kanji_furigana">${Kdata[i].furigana} </span> 
            </div>
        `;
        tab_pane.appendChild(div)
    }
}

const kanji_furigana = document.querySelectorAll(".kanji_furigana");



                // let test_yechish  = document.getElementById('test_yechish');
                // test_yechish.addEventListener('click', ()=>{
                //     let div_test = document.getElementById('test');
                //     div_test.innerHTML = `
                //         <p>${Bdata[i].test_1}</p>
                //         <p>${Bdata[i].test_2}</p>
                //         <p>${Bdata[i].test_3}</p>
                //         `;
                // })