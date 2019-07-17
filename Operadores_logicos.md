# Operadores lógicos

Operadores lógicos são usados para combinar expressões lógicas entre si, 
agrupando testes condicionais.

Operador    | Descrição
--------    | ---------
($a and $b) | E   - Verdadeiro (`TRUE`) se tanto `$a` quanto `$b` forem verdadeiros. 
($a or $b)  | OU  - Verdadeiro (`TRUE`) se `$a` ou `$b` forem verdadeiros. 
($a xor $b) | XOR - Verdadeiro (`TRUE`) se `$a` ou `$b` forem verdadeiros, de forma exclusiva. 
(! $a)      | NOT - Verdadeiro (`TRUE`) se `$a` for **FALSE**. 
($a && $b)  | E   - Verdadeiro (`TRUE`) se tanto `$a` quanto `$b` forem verdadeiros. 
($a || $b)  | OU  - Verdadeiro (`TRUE`) se `$a` ou `$b` forem verdadeiros. 
 
**Observação:** or e and têm precedência menor que && ou ||.

No programa a seguir, se as variáveis `$vai_chover` e `$esta_frio` forem verdadeiras ao
mesmo tempo, será impresso no console "Não vou sair de casa".

    <?php 
    $vai_chover = TRUE;
    $esta_frio  = TRUE;

    if ($vai_chover and $esta_frio) {
    	"Não vou sair de casa";
    }

### Resultado:
Não vou sair de casa.
___

Já neste outro programa, caso uma variável seja **TRUE** e a outra seja **FALSE** (OU exclusivo), 
será impresso no console "Vou pensar duas vezes antes de sair".
```php
    <?php
    $vai_chover = FALSE;
    $esta_frio  = TRUE;

    if ($vai_chover xor $esta_frio) {
    	echo "Vou pensar duas vezes antes de sair";
    }
```

**Resultado**

Vou pensar duas vezes antes de sair