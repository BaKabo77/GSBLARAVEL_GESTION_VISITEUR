@extends ('modeles/visiteur')
    @section('menu')
            <!-- Division pour le sommaire -->
        <div id="menuGauche">
            <div id="infosUtil">
                  
             </div>  
               <ul id="menuList">
                   <li >
                    <strong>Bonjour Gestionnaire : {{ $visiteur['nom'] . ' ' . $visiteur['prenom'] }}</strong>
                      
                   </li>
                  <li class="smenu">
                     <a href="{{ route('chemin_listeVisiteur')}}" title="Liste des visiteurs ">Liste des visiteurs</a>
                  </li>
                  
                  <li class="smenu">
                <a href="{{ route('chemin_deconnexion') }}" title="Se déconnecter">Déconnexion</a>
                  </li>
                </ul>
               
        </div>
    @endsection          