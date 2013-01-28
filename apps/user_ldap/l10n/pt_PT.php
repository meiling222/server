<?php $TRANSLATIONS = array(
"<b>Warning:</b> Apps user_ldap and user_webdavauth are incompatible. You may experience unexpected behaviour. Please ask your system administrator to disable one of them." => "<b>Aviso:</b> A aplicação user_ldap e user_webdavauth são incompativeis. A aplicação pode tornar-se instável. Por favor, peça ao seu administrador para desactivar uma das aplicações.",
"<b>Warning:</b> The PHP LDAP module is not installed, the backend will not work. Please ask your system administrator to install it." => "<b>Aviso:</b> O módulo PHP LDAP não está instalado, logo não irá funcionar. Por favor peça ao administrador para o instalar.",
"Host" => "Anfitrião",
"You can omit the protocol, except you require SSL. Then start with ldaps://" => "Pode omitir o protocolo, excepto se necessitar de SSL. Neste caso, comece com ldaps://",
"Base DN" => "DN base",
"One Base DN per line" => "Uma base DN por linho",
"You can specify Base DN for users and groups in the Advanced tab" => "Pode especificar o ND Base para utilizadores e grupos no separador Avançado",
"User DN" => "DN do utilizador",
"The DN of the client user with which the bind shall be done, e.g. uid=agent,dc=example,dc=com. For anonymous access, leave DN and Password empty." => "O DN to cliente ",
"Password" => "Palavra-passe",
"For anonymous access, leave DN and Password empty." => "Para acesso anónimo, deixe DN e a Palavra-passe vazios.",
"User Login Filter" => "Filtro de login de utilizador",
"Defines the filter to apply, when login is attempted. %%uid replaces the username in the login action." => "Define o filtro a aplicar, para aquando de uma tentativa de login. %%uid substitui o nome de utilizador utilizado.",
"use %%uid placeholder, e.g. \"uid=%%uid\"" => "Use a variável %%uid , exemplo: \"uid=%%uid\"",
"User List Filter" => "Utilizar filtro",
"Defines the filter to apply, when retrieving users." => "Defina o filtro a aplicar, ao recuperar utilizadores.",
"without any placeholder, e.g. \"objectClass=person\"." => "Sem variável. Exemplo: \"objectClass=pessoa\".",
"Group Filter" => "Filtrar por grupo",
"Defines the filter to apply, when retrieving groups." => "Defina o filtro a aplicar, ao recuperar grupos.",
"without any placeholder, e.g. \"objectClass=posixGroup\"." => "Sem nenhuma variável. Exemplo: \"objectClass=posixGroup\".",
"Port" => "Porto",
"Base User Tree" => "Base da árvore de utilizadores.",
"One User Base DN per line" => "Uma base de utilizador DN por linha",
"Base Group Tree" => "Base da árvore de grupos.",
"One Group Base DN per line" => "Uma base de grupo DN por linha",
"Group-Member association" => "Associar utilizador ao grupo.",
"Use TLS" => "Usar TLS",
"Do not use it for SSL connections, it will fail." => "Não use para ligações SSL, irá falhar.",
"Case insensitve LDAP server (Windows)" => "Servidor LDAP (Windows) não sensível a maiúsculas.",
"Turn off SSL certificate validation." => "Desligar a validação de certificado SSL.",
"If connection only works with this option, import the LDAP server's SSL certificate in your ownCloud server." => "Se a ligação apenas funcionar com está opção, importe o certificado SSL do servidor LDAP para o seu servidor do ownCloud.",
"Not recommended, use for testing only." => "Não recomendado, utilizado apenas para testes!",
"User Display Name Field" => "Mostrador do nome de utilizador.",
"The LDAP attribute to use to generate the user`s ownCloud name." => "Atributo LDAP para gerar o nome de utilizador do ownCloud.",
"Group Display Name Field" => "Mostrador do nome do grupo.",
"The LDAP attribute to use to generate the groups`s ownCloud name." => "Atributo LDAP para gerar o nome do grupo do ownCloud.",
"in bytes" => "em bytes",
"in seconds. A change empties the cache." => "em segundos. Uma alteração esvazia a cache.",
"Leave empty for user name (default). Otherwise, specify an LDAP/AD attribute." => "Deixe vazio para nome de utilizador (padrão). De outro modo, especifique um atributo LDAP/AD.",
"Help" => "Ajuda"
);
