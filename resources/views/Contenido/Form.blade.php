<form class="">
            <div class="form-row">
                <div class="col-md-8">
                    <div class="position-relative form-group">
                        <label for="nombre" class="">Nombre completo <red>*</red></label>
                        <input name="nombre" id="nombre" placeholder="Nombre completo" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="nom_mascota" class="">Nombre del perrito que quiere adoptar <red>*</red></label>
                        <input name="nom_mascota" id="nom_mascota" placeholder="Nombre del perrito que quiere adoptar" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-5">
                    <div class="position-relative form-group">
                        <label for="edades" class="">¿Qué edades tienen las personas que vivirán con él?</label>
                        <input name="edades" id="edades" placeholder="Edades. Ejemplo: 10,25" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="position-relative form-group">
                        <label for="calle" class="">Callle <red>*</red></label>
                        <input name="calle" id="calle" placeholder="Calle" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-2">
                    <div class="position-relative form-group">
                        <label for="n_exterior" class="">No. Exterior <red>*</red></label>
                        <input name="n_exterior" id="n_exterior" placeholder="No. Exterior" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="position-relative form-group">
                        <label for="n_interior" class="">No. Interior <red>*</red></label>
                        <input name="n_interior" id="n_interior" placeholder="No. Interior" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="position-relative form-group">
                        <label for="colonia" class="">Colonia <red>*</red></label>
                        <input name="colonia" id="colonia" placeholder="Colonia" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-8">
                    <div class="position-relative form-group">
                        <label for="Delegación" class="">Delegación <red>*</red></label>
                        <input name="Delegación" id="Delegación" placeholder="Delegación" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="cp" class="">Código postal <red>*</red></label>
                        <input name="cp" id="cp" placeholder="Código postal" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="calle1" class="">Entre calle</label>
                        <input name="calle1" id="calle1" placeholder="Entre calle" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="position-relative form-group">
                        <label for="calle2" class="">Y calle</label>
                        <input name="calle2" id="calle2" placeholder="Y calle" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label for="referencias" class="">Referencias al domicilio</label>
                        <textarea name="referencias" id="referencias" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="tel_casa" class="">Telefono de casa <red>*</red></label>
                        <input name="tel_casa" id="tel_casa" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="celular" class="">Celular <red>*</red></label>
                        <input name="celular" id="celular" type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="email" class="">Email <red>*</red></label>
                        <input name="email" id="email" type="text" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="donde_mascota" class="">¿Dondé vivirá el perrito?</label>
                        <select name="donde_mascota" class="mb-2 form-control">
                            <option disabled>Selecciona una opción</option>
                            <option value="Casa">Casa</option>
                            <option value="Departamento">Departamento</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="animales" class="">¿Tienes animales ahora?</label>
                        <select name="animales" class="mb-2 form-control">
                            <option disabled>Selecciona una opción</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="position-relative form-group">
                        <label for="cuantos" class="">¿Cuántos?</label>
                        <input name="cuantos" id="cuantos" type="number" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label class="">¿Qué tipo de animales son?(si no cuenta con ningun animal no seleccione ninguna)</label>
                        
                        
                            <div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <input name="perros" type="checkbox" id="perros" class="custom-control-input">
                                    <label class="custom-control-label" for="perros">Perros</label>
                                </div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <input name="gatos" type="checkbox" id="gatos" class="custom-control-input">
                                    <label class="custom-control-label" for="gatos">Gatos</label>
                                </div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <input name="roedores" type="checkbox" id="roedores" class="custom-control-input">
                                    <label class="custom-control-label" for="roedores">Roedores</label>
                                </div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <input name="aves" type="checkbox" id="aves" class="custom-control-input">
                                    <label class="custom-control-label" for="aves">Aves</label>
                                </div>
                                <div class="custom-checkbox custom-control custom-control-inline">
                                    <input name="peces" type="checkbox" id="peces" class="custom-control-input">
                                    <label class="custom-control-label" for="peces">Peces</label>
                                </div>
                            <!--<div class="custom-checkbox custom-control custom-control-inline">
                                    <input name="ninguno" type="checkbox" id="ninguno" class="custom-control-input">
                                    <label class="custom-control-label" for="ninguno">Ninguno</label>
                                </div>-->
                            </div>
                        

                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12">
                    <div class="position-relative form-group">
                        <label for="porque" class="">¿Por qué quieres adoptar a est@ perrit@? <red>*</red></label>
                        <textarea name="porque" id="porque" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="custom-checkbox custom-control custom-control-inline">
                    <input name="acuerdo" id="acuerdo" type="checkbox" class="custom-control-input">
                    <label for="acuerdo" class="custom-control-label">He leído y estoy de acuerdo con el proceso de adopción <red>*</red></label>
                </div>
            </div>
            <button class="mt-2 btn btn-primary">Enviar</button>
        </form>