<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    // Création des propriétés de classe $data (pour les vues)
    protected $data;

    public function __construct(){
        parent::__construct();

        //Chargement du modèle Countries et users pour toute la classe
        $this->load->model('Countries_model');
        $this->load->model('Users_model');

        //Récupération de tous les pays
        $this->data["countries"] = $this->Countries_model->get_all();
    }

    public function index(){
        $this->load->view('templates/header');

        if ($this->input->post()) {
            $this->create();
        } else {
            // Chargement du formulaire et liste des apprenants
            $this->form();
            $this->list();
        }

        $this->load->view('templates/footer');

    }

    public function form(){
        //Chargement du helper Form pour générer la balise Form
        $this->load->helper('form');

        // Appel de la vue
        $this->load->view('users/create', $this->data);
    }

    function list() {
        // Chargement du modèle 'Users_model" accessible dans les différentes méthodes de la classe
        $this->data["users"] = $this->Users_model->get_users();
        $this->load->view('users/list', $this->data);
    }

    public function create(){
        //Chargement du helper Form pour générer la balise Form
        $this->load->helper('form');
        $this->load->library('form_validation');

        // Il faudrait ici, ajouter cette règle aux règles par défaut
        //$countriesListIds = $this->Countries_model->get_ids();
        //$this->form_validation->set_rules('birthCountry', 'Pays de naissance', 'numeric|in_list['.$countriesListIds.']');

        if ($this->form_validation->run('signup') === false) {
            $this->data["postData"] = $this->input->post(null);
            $this->load->view('users/create', $this->data);
            $this->load->view('users/list');

        } else {
            $this->load->model('Users_model');
            $this->Users_model->set_user();
            //Chargement de tous les utilisateurs, y compris le dernier enregistrement
            $this->data["users"] = $this->Users_model->get_users();

            // Ajout d'un flash message à afficher dans la vue "infoMessage"
            $this->session->set_flashdata('success', "Utilisateur enregistré avec succès");
            $this->load->view('Users/infoMessage');
            // suppression du flash message
            $this->session->unset_userdata('success');

            //Appel des vues "form" et "liste"
            $this->load->view('users/create', $this->data);
            $this->load->view('users/list');

        }
    }

}
