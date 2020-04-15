<?php
class sspmod_gsuitemodule_Auth_Source_GSuiteAuth
// extends sspmod_core_Auth_UserPassBase
{
    protected function login($username, $password)
    {
        //
        if ($username == 'usuario.teste' && $password == '12345678') {
            return array(
                'uid' => array('uidUsuario'),
                'displayName' => array('Usuario'),
                'eduPersonAffiliation' => array('member', 'employee'),
                'mail' => array('usuario@p.foredu.com.br')
            );
        }
        // throw new SimpleSAML_Error_Error('WRONGUSERPASS');
    }
}
