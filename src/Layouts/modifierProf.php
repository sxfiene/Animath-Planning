<!-- E-mail Modal -->
<div class="modal fade modal-lg" id="emailModal" tabindex="-1" aria-labelledby="emailModalLabel" aria-hidden="true">
    <form class="container needs-validation" method="post" action="?controller=User&action=changeEmail" novalidate>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Changer votre E-mail</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">E-mail</span>
                            <input type="text" name="email" class="form-control" aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Mot de passe</span>
                            <label>
                                <input type="password" name="pass" class="form-control" aria-describedby="basic-addon1">
                            </label>
                        </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider">
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Nom Modal -->
<div class="modal fade modal-lg" id="nomModal" tabindex="-1" aria-labelledby="nomModalLabel" aria-hidden="true">
    <form class="container needs-validation" method="post" action="?controller=User&action=changeLastName" novalidate>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Changer votre nom</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Nom</span>
                        <input type="text" class="form-control" name="name" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
        </div>
    </div>
    </form>
</div>

<!-- Prenom Modal -->
<div class="modal fade modal-lg" id="prenomModal" tabindex="-1" aria-labelledby="prenomModalLabel" aria-hidden="true">
    <form class="container needs-validation" method="post" action="?controller=User&action=changeFirstName" novalidate>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Changer votre prenom</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Prenom</span>
                        <input type="text" class="form-control"  name="name" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
        </div>
    </div>
    </form>
</div>

<!-- School Modal -->
<div class="modal fade modal-lg" id="schoolModal" tabindex="-1" aria-labelledby="schoolModalLabel" aria-hidden="true">
    <form class="container needs-validation" method="post" action="?controller=User&action=changeSchool" novalidate>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Changer votre établissement</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Etablissement</span>
                        <input type="text" class="form-control" name="school" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
        </div>
    </div>
    </form>
</div>

<!-- Telephone Modal -->
<div class="modal fade modal-lg" id="telephoneModal" tabindex="-1" aria-labelledby="telephoneModalLabel" aria-hidden="true">
    <form class="container needs-validation" method="post" action="?controller=User&action=changePhone" novalidate>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Changer votre téléphone</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">Telephone</span>
                        <input type="text" class="form-control" name="phone" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
        </div>
    </div>
    </form>
</div>

<!-- MDP Modal -->
<div class="modal fade modal-lg" id="MdpModal" tabindex="-1" aria-labelledby="MdpModalLabel" aria-hidden="true">
    <form class="container needs-validation" method="post" action="?controller=User&action=changePass" novalidate>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Changer votre mot de passe</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Ancien mot de passe</span>
                    <input type="text" name="old_pass" class="form-control" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nouveau mot de passe</span>
                    <input type="text" name="pass" class="form-control verifpass" aria-describedby="basic-addon1">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Confirmez nouveau mot de passe</span>
                    <input type="text" name="pass_confirm" class="form-control verifpassconfirm" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                <input type="submit" class="btn btn-primary" value="Valider">
            </div>
        </div>
    </div>
    </form>
</div>



