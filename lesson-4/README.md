🇧🇷 **PT-BR**

# Aula 4 - Métodos Especiais

- **Getter:** Método acessor para que seja possível acessar um atríbuto e retornar o seu estado atual.

- **Setter:** Método modificador (ou método mutante) para que seja possível acessar um atríbuto e modificar o seu estado atual.

- **Constructor:** Método construtor para que seja determinado quais ações devem ser executadas no momento da criação de um novo objeto a partir de sua classe.

```php
class Pessoa {
    // atríbutos
    público nome;
    privado idade;
    público vivo;

    // método construtor
    função construtor() {
        vivo = true;
    }

    // métodos
    público função getNome() {
        retorne nome;
    }
    
    público função setNome(novoNome) {
        nome = novoNome;
    }

    público função getIdade() {
        retorne idade;
    }

    público função setIdade(novaIdade) {
        idade = novaIdade;
    }

    público função getVivo() {
        retorne vivo;
    }

    público função setVivo(novaSituação) {
        vivo = novaSituação;
    }
}

// nova instância de uma classe
p1 = nova Pessoa;

// atribuindo/modificando o estado atual dos atríbutos
p1.setNome("João");
p1.setIdade(21);

// obtendo o estado atual dos atríbutos
echo(p1.getNome());
echo(p1.getIdade());
echo(p1.getVivo());

// saída
João
21
true
```

- Um método construtor também pode receber parâmetros onde no momento da criação do novo objeto a partir de sua classe podemos já informar os estados a serem "setados" nos atríbutos.

```php
class Pessoa {
    // atríbutos
    público nome;
    privado idade;
    público vivo;

    // método construtor
    função construtor(novoNome, novaIdade) {
        nome = novoNome;
        idade = novaIdade;
        vivo = true;
    }

    // métodos
    público função getNome() {
        retorne nome;
    }
    
    público função setNome(novoNome) {
        nome = novoNome;
    }

    público função getIdade() {
        retorne idade;
    }

    público função setIdade(novaIdade) {
        idade = novaIdade;
    }

    público função getVivo() {
        retorne vivo;
    }

    público função setVivo(novaSituação) {
        vivo = novaSituação;
    }
}

// nova instância de uma classe
p1 = nova Pessoa("Maria", 23);

// obtendo o estado atual dos atríbutos
echo(p1.getNome());
echo(p1.getIdade());
echo(p1.getVivo());

// saída
Maria
23
true
```