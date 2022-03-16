// const body = document.getElementById('body');
// window.onload = () =>{
//     body.style.visibility = "hidden"
//     setTimeout(() => {
//         body.style.visibility = "visible";
//     }, 800);
// }

const btn = document.getElementById('button');
    btn.addEventListener('click', (event) =>{
        event.preventDefault
        const login = document.getElementById('modal')
            login.style.visibility = "visible"
            const contGlobal = document.getElementById('global')
            contGlobal.classList.add('overlay')
            document.body.style.overflow = "hidden"
        
})

 const btnRemove = document.getElementById('btnremove');
    btnRemove.addEventListener('click' , (event) =>{
        event.preventDefault
        const login = document.getElementById('modal')
            login.style.visibility = "hidden"
            const contGlobal = document.getElementById('global')
            contGlobal.classList.remove('overlay')
            document.body.style.overflow = "auto"
        
})
