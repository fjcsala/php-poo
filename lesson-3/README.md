🇧🇷 **PT-BR**

# Aula 3 - O Que é Visibilidade de um Objeto?

- **UML:** **Unified Modeling Language** ou **Linguagem de Modelagem Unificada** é uma linguagem para a elaboração da estrutura de projetos de software. Ela poderá ser empregada para a visualização, a especificação, a construção e a documentação de artefatos que façam uso de sistemas complexos de software.

- **Diagrama de Classes:** É uma representação da estrutura e relações das classes que servem de modelo para objetos.

- **Modificadores de Visibilidade:** Indicam o nível de acesso aos componentes internos de uma classe.

    - Público **( + )**
        - A classe atual e todas as classes tem acesso. Exemplo: Orelhão, qualquer um pode ter acesso.

    - Privado **( - )**
        - Apenas a classe atual tem acesso. Exemplo: Celular, apenas o proprietário pode ter acesso.

    - Protegido **( # )**
        - A classe atual e todas as suas sub-classes tem acesso. Exemplo: Telefone fixo, apenas quem possui autorização pode ter acesso.

```php
classe Pessoa {
    // atributos
    público nome;
    privado idade;
    protegido altura;
    protegido peso;
    público vivo;

    // métodos
    público andar();
    privado correr();
    protegido falar();
}

// novo objeto
p1 = nova Pessoa;

// definindo atributos
p1.nome = "João"; // é possível pois este atributo é público
p1.idade = 27; // não é possível pois este atributo é privado
p1.altura = 1.88; // não é possível pois este atributo é protegido
p1.peso = 90; // não é possível pois este atributo é protegido
p1.vivo = verdadeiro; // é possível pois este atributo é público

// definindo métodos
p1.andar(); // é possível pois este método é público
p1.falar(); // não é possível pois este método é protegido
```