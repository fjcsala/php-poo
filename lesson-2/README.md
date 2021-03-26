🇧🇷 **PT-BR**

# Aula 2 - O Que é um Objeto?

> Palavras-Chave

**Objeto:** Coisa material ou abstrata que pode ser percebida pelos sentidos e descrita por meio das suas **características**, **comportamentos** e **estado atual** (instância de uma classe).

**Classe:** É uma estrutura genérica composta por atributos, métodos e estados que é utilizado para constituir um novo objeto. Diferentes objetos podem ser criados a partir de uma classe. Define os atributos e métodos comuns que serão compartilhados por um objeto.

**Atributo:** São características que um determinado objeto pode possuir.

**Método:** São funções (ações) que um determinado objeto pode possuir.

**Estado:** Como o próprio nome diz, é o estado em que um determinado atributo se encontra.

- **O que o objeto tem?**
- **O que o objeto faz?**
- **Como o objeto está agora?**

```php
classe Pessoa {
    // atributos
    nome;
    idade;
    altura;
    peso;

    // métodos
    andar();
    correr();
    falar();
}
```

**Instância:** Significa criar um novo objeto a partir de uma classe (instanciar um objeto de uma classe).

```php
// novo objeto
p1 = nova Pessoa;

// definindo atributos
p1.nome = "João";
p1.idade = 27;
p1.altura = 1.88;
p1.peso = 90;

// definindo métodos
p1.andar();
p1.falar();



// novo objeto
p2 = nova Pessoa;

// definindo atributos
p2.nome = "Maria";
p2.idade = 23;
p2.altura = 1.76;
p2.peso = 65;

// definindo métodos
p2.andar();
p2.falar();
```
**Abstração:** O conceito de abstração consiste em esconder os detalhes de algo, no caso, os detalhes desnecessários. No mundo real, utilizamos abstrações o tempo todo. Tudo que não sabemos como funciona por baixo dos panos pode ser considerado uma abstração.