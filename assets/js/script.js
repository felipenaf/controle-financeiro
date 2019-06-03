// // Exemplos básicos de função #02

// function soma(a, b = 0){
//     return a + b
// }

// console.log(soma(10, 2))

// /* - - - - - - - - - - */

// const soma2 = function (a, b){
//     return a + b
// }

// console.log(soma2(5, 6))

// /* - - - - - - - - - - */

// #03 Objetos

var pessoa = {
    nome: "Felipe",
    nome_do_meio: "",
    ultimo_nome: "Ferreira",
    idade: 25,
    formacao: {
        curso01: "",
        curso02: ""
    }
}

// console.log(pessoa);

// retorna a segunda opção caso não exista a primeira
console.log(pessoa.nome_do_meio || pessoa["ultimo_nome"]);

// retorna o undefined
console.log(pessoa.teste);

// evita o retorno do TypeError
console.log(pessoa.teste && pessoa.teste.teste);

console.log(pessoa.formacao);


/* - - - - - - - - - - */