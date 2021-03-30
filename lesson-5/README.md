🇧🇷 **PT-BR**

# Aula 5 - Exemplo Prático Com Objetos

**Instruções do Exercício:**

Duas pessoas querem abrir uma conta no banco, o Jubileu e a Creusa.

O Jubileu optou por abrir uma conta poupança, e irá depositar R$ 300 em sua conta. A Creusa, possui um pouco mais de dinheiro e quer depositar R$ 500 em uma conta corrente.

Para isso, eles precisam abrir uma conta no banco.

```
ContaBanco
    + numConta
    # tipo
    - dono
    - saldo
    - status

    + abrirConta()
    + fecharConta()
    + depositar()
    + sacar()
    + pagarMensal()
```

**Requisitos:**

1. O tipo da conta só aceita dois caracteres, "cc" e "cp". Conta corrente e conta poupança, respectivamente.

2. Na hora de abrir uma conta, caso seja uma conta poupança ela deverá iniciar com R$ 150 de saldo, caso escolha abrir uma conta corrente ela deverá iniciar com R$ 50 de saldo.

3. Para fechar a conta não pode haver saldo positivo ou negativo.

4. Para fazer um depósito ou sacar, a conta já deve ter sido aberta. No caso do saque, a conta precisa ter saldo, e o valor do saque não deve ser superior.

5. A mensalidade vai ser cobrada diretamente do saldo. O cliente com conta corrente pagará R$ 12 e o cliente com conta poupança pagará R$ 20 de mensalidade.

6. É necessário utilizar o método getter e setter para todos os atributos.

7.  É necessário ter um método construtor, onde o seu status será definido como falso e o seu saldo será definido como zero.