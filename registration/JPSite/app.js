const date = document.getElementById('clock');
function upDateTime(){
    const now = new Date() 
    const h = now.getHours()
    const m = now.getMinutes()

    if(h < 10){
        date.innerHTML = "0:" + h + ":" + m;
    }
    if(m < 10){
        date.innerHTML = h + ":" + "0" + m;
    }
}
upDateTime()
setInterval(upDateTime, 1000);

var formGrammer = document.querySelector('#form-grammer');
var formGoi = document.querySelector('#form-goi');
var searchGrammer = document.getElementById("searchGrammer");
var searchGoi = document.getElementById('searchGoi')
formGrammer.addEventListener('submit', function (e) {
    e.preventDefault();
    var searchQuery = searchGrammer.value.toLowerCase();
    var foundUser = data.find(function (user) {
        return user.grammaTitle.toLowerCase() === searchQuery;
    });
    if (foundUser) {
        const content = document.querySelector('.content');
        content.classList.add('p-4')
        content.innerHTML = `                  
            <div class="content-header">
                <h1 class="text-center">${foundUser.grammaTitle}</h1>
                <h3 class="text-start">${foundUser.mean}</h3>
            </div>
            <div class="content-main">
                <h5>1 ${foundUser.example_1}</h5>
                <h5>2 ${foundUser.example_2}</h5>
                <h5>3 ${foundUser.example_3
                }</h5>
            </div>
      `;
    } else {
        document.querySelector('.content').innerHTML = `
        <p>No user found with that name.</p>
      `;
    }
});


let no_contect_level = document.querySelectorAll('.n__level__no_content');

no_contect_level.forEach((e)=>{
    e.addEventListener("click", (e)=>{
        e.preventDefault();
        alert("まだデータを集まる中です！");
    })
})
// form.addEventListener('submit', (e)=>{
//     e.preventDefault();
//     data.push(searchValue.value);
//     console.log(data);
// });