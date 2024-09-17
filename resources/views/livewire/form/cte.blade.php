{{-- The Master doesn't talk, he acts. --}}
<div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <h1 class="m-0">Catalogos</h1>
                </div>

                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                    </ol>
                </div>
            </div>
        </div>
    </div>
    <form wire:submit="save">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <button class="btn btn-success" type="submit"><i class="fa fa-home"></i></button>
                    <button class="btn btn-warning"><i class="fa fa-bars"></i></button>
                    <button class="btn btn-warning"><i class="fa fa-trash"></i></button>
                    <button class="btn btn-warning"><i class="fa fa-floppy-o" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <section>
                <div class="row">
                    <div class="col-xl-12 col-md-12 mb-12">
                        <div class="card">
                            <div class="card-body">

                                <div class="form-row">
                                    <div class="form-group col-md-2">
                                        <label for="inputEmail4">Codigo</label>
                                        <input type="text" wire:model="form.codigo" class="form-control"
                                            id="inputEmail4" placeholder="Codigo">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputPassword4">Nombre</label>
                                        <input type="text" wire:model="form.nombre" class="form-control"
                                            placeholder="Password">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">DUI</label>
                                        <input type="text" class="form-control" wire:model="form.dui">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputCity">Nit</label>
                                        <input type="text" class="form-control" wire:model="form.nit">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputAddress2">NCR</label>
                                        <input type="text" class="form-control" id="inputAddress2"
                                            wire:model="form.ncr" placeholder="Ncr">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Direccion</label>
                                    <input type="text" class="form-control" wire:model="form.direccion"
                                        placeholder="Direccion">
                                </div>

                                <div class="form-row">

                                    {{-- The Master doesn't talk, he acts.
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    --}}

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Telefono</label>
                                        <input type="text" class="form-control" wire:model="form.telefono">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Familia</label>
                                        <input type="text" class="form-control" wire:model="form.familia">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Categoria</label>
                                        <input type="text" class="form-control" wire:model="form.categoria">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Pais</label>
                                        <input type="text" class="form-control" wire:model="form.pais">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Departamento</label>
                                        <input type="text" class="form-control" wire:model="form.departamento">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Municipio</label>
                                        <input type="text" class="form-control" wire:model="form.municipio">
                                    </div>
                                </div>

                                <div class="form-row">

                                    {{-- The Master doesn't talk, he acts.
                                    <div class="form-group col-md-4">
                                        <label for="inputState">State</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>

                                    --}}

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Actividad Econ.</label>
                                        <input type="text" class="form-control" wire:model="form.ae">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Email</label>
                                        <input type="text" class="form-control" wire:model="form.email">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Contacto</label>
                                        <input type="text" class="form-control" wire:model="form.contacto">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Agente</label>
                                        <input type="text" class="form-control" wire:model="form.agente">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">Listaprecios</label>
                                        <input type="text" class="form-control" wire:model="form.listaprecios">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">condicion</label>
                                        <input type="text" class="form-control" wire:model="form.condicion">
                                    </div>
                                </div>


                                <div class="form-row">

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">limitesaldo</label>
                                        <input type="text" class="form-control" wire:model="form.limitesaldo">
                                    </div>

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">saldomaximo</label>
                                        <input type="text" class="form-control" wire:model="form.saldomaximo">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">diastramite</label>
                                        <input type="text" class="form-control" wire:model="form.diastramite">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">zonaimpuestos</label>
                                        <input type="text" class="form-control" wire:model="form.zonaimpuestos">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">regimenfiscal</label>
                                        <input type="text" class="form-control" wire:model="form.regimenfiscal">
                                    </div>
                                    <div class="form-group col-md-2">
                                        <label for="inputZip">grupo</label>
                                        <input type="text" class="form-control" wire:model="form.grupo">
                                    </div>
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-2">
                                        <label for="inputZip">estatus</label>
                                        <input type="text" class="form-control" wire:model="form.estatus">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="gridCheck">
                                        <label class="form-check-label" for="gridCheck">
                                            Check me out
                                        </label>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                </div>

            </section>
        </div>
    </form>
</div>
