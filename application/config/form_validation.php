<?php
$config = array(
    'signup' => array(
                    array('field'=>'lastname', 'label' => 'Nom', 'rules' => 'required|trim|min_length[2]|max_length[50]'),
                    array('field'=>'firstname', 'label' => 'Prénom', 'rules' => 'trim|min_length[2]|max_length[50]'),
                    array('field'=>'birthdate', 'label' => 'Date de Naissance', 'rules' => array('field'=>'regex_match[/([12]\d{3}-(0[1-9]|1[0-2])-(0[1-9]|[12]\d|3[01]))/]')),
                    array('field'=>'nationality', 'label' => 'Nationalité', 'rules' => 'trim|min_length[2]|max_length[50]'),
                    array('field'=>'address', 'label' => 'Adresse', 'rules' => 'trim'),
                    array('field'=>'email', 'label' => 'Email', 'rules' => 'required|valid_email|is_unique[users.email]'),
                    array('field'=>'phone', 'label' => 'Téléphone', 'rules' => 'trim|regex_match[/^(?:\+33|0033|0)[1-79]((?:([\-\/\s\.])?[0-9]){2}){4}$/]'),
                    array('field'=>'Diplôme', 'label' => 'diploma', 'rules' => 'trim|is_natural'),
                    array('field'=>'Numéro pôle emploi', 'label' => 'jobNumber', 'rules' => 'trim'),
                    array('field'=>'badgeNumber', 'label' => 'badgeNumber', 'rules' => 'trim|is_natural'),
                    array('field'=>'codecademyLinks', 'label' => 'codecademyLinks', 'rules' => 'valid_url'),
                    array('field'=>'superHero', 'label' => 'superHero', 'rules' => 'max_lenght[300]'),
                    array('field'=>'hack', 'label' => 'hack', 'rules' => 'max_lenght[300]'),
                    array('field'=>'developer', 'label' => 'developer', 'rules' => 'regex_match[/[0-1]{1}/]')
    )
);
