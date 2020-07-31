<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Scalar\String_;
use App\Repositories\ModuleRepository;
use PDF;

class ModuleController extends Controller
{

    protected $moduleRepository;

    // Injection de dependances
    //Ici on injecte la repository de Module pour la construction de notre controleur
    public function __construct(ModuleRepository $repository)
    {
        $this->moduleRepository = $repository;
    }

    // Affichage de l'interface de visualisation de fonctionnement des modules
    // Renvoie la vue de visualisation et la liste des modules
    public function index() {
        // Appel a la methode d'affichage de tous les modules
        $modules = $this->moduleRepository->getAll();
        return view('/pages.dashboard', compact("modules"));
    }

    // Affiche tous les modules
    public function findAll() {
        $modules = $this->moduleRepository->getAll();
        return view('/pages.modules-list', compact("modules"));
    }

    // Affichage formulaire d'inscription d'un module
    public function getModuleRegistrationForm() {
        return view('pages.module-registration-form');
    }

    // Inscription d'un nouveau module
    public function addModule(Request $request) {
        // Appel a la methode de stockage d'un module
        $module = $this->moduleRepository->save($request->all());

        // On revient sur le fomulaire apres inscription du module
        return redirect()->back()
            ->withInput()
            ->with('success', 'Module enregistré !');
    }

    // Génération d'état de fonctionnement de tous les modules en PDF
    public function generatorStateOfAllModules()
    {
        // On recupère tous les les modules
        $modules = $this->moduleRepository->getAll();

        // On charge la vue et la liste de tous les modules
        $pdf = PDF::loadView('/pages/modules-print', compact('modules'))
            ->setPaper('a4', 'portrait');
        $fileName = 'etat-des-modules';

        return $pdf->stream($fileName.'.pdf');

    }

    // Génération d'état de fonctionnement d'un module
    public function generatorStateOfOneModule($id) {
        $module = $this->moduleRepository->getById($id);

        $pdf = PDF::loadView('/pages/module-print', compact('module'))
            ->setPaper('a4', 'portrait');
        $fileName = 'etat-du-module';

        return $pdf->stream($fileName.'.pdf');
    }

}
