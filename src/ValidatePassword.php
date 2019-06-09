
 <?php

 /**
  * Clase de prueba para Eleanex y Devops Full Power
  * @link https://en.wikipedia.org/wiki/Email_address

  */
class ValidatePassword
{
    /**
     * Define el tamaño máximo
     */
    const MIN_LENGTH = 6;
    const MAX_LEGTH = 20;

    /**
     * Valida el tamaño que el tamaño del password sea acorde a los parametros
     * bla bla
     * 
     * @param string $password
     * @return void
     */
    public function validLength($password)
    {
        $passLength = strlen($password);

        return $passLength >= self::MIN_LENGTH && $passLength <= self:: MAX_LEGTH;
    }
}
