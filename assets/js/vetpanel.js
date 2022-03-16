const client = document.getElementsByClassName('sidebar__button')
const formClinic = document.getElementsByClassName('form-consulta')
const tablePatient = document.getElementsByClassName('table-pacient')

function chargeTittle(titulo){
    const h1 = document.getElementById('title')
    h1.innerText = titulo 
}
function chargePainel(painel){
    formClinic[0].style.visibility = "hidden"
    tablePatient[0].style.visibility = "hidden"
    painel[0].style.visibility = "visible"
}

client[0].addEventListener('click' , (event) => {
    chargeTittle("Ficha Clínica")
    chargePainel(formClinic)
})
client[1].addEventListener('click' , (event) => {
    chargeTittle("Pacientes Agendados")
    chargePainel(tablePatient)
})


