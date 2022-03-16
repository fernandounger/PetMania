const client = document.getElementsByClassName('sidebar__button')
const formClient = document.getElementsByClassName('form-cliente')
const formConsulta = document.getElementsByClassName('form-consulta')
const tableClient = document.getElementsByClassName('table-pacient')

function chargeTittle(titulo){
    const h1 = document.getElementById('title')
    h1.innerText = titulo 
}
function chargePainel(painel){
    formClient[0].style.visibility = "hidden"
    formConsulta[0].style.visibility = "hidden"
    tableClient[0].style.visibility = "hidden"
    painel[0].style.visibility = "visible"
}

client[0].addEventListener('click' , (event) => {
    chargeTittle("Cadastro Cliente")
    chargePainel(formClient)
})
client[1].addEventListener('click' , (event) => {
    chargeTittle("Cadastro Consulta")
    chargePainel(formConsulta)
})
client[2].addEventListener('click' , (event) => {
    chargeTittle("Pacientes Agendados")
    chargePainel(tableClient)
})


