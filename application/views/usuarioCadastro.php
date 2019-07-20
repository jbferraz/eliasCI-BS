<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Usuário</h1><p></p>
        <?php echo form_open('usuario/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="nomeUsuario" placeholder="Nome"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="user" placeholder="user"/>
        </div>
        <div class="form-group">
            <input type="password" class="form-control form-control-lg" 
                   name="senha" placeholder="Senha"/>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio1" value="Administrador">
                <label class="form-check-label" for="inlineRadio1">Administrador</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="perfilAcesso" id="inlineRadio2" value="Usuario">
                <label class="form-check-label" for="inlineRadio2">Usuario</label>
            </div>
        </div>

        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home" id="cancelar">Cancelar</a>
        <?php form_close(); ?> 
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <p></p>
        <h1 class="jumbotron-heading">Lista de Usuário</h1><p></p>
        <table id="table_id" 
               class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th >Nome</th>
                    <th >User</th>
                    <th >Perfil</th>
                    <th >Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $p): ?>
                    <tr>
                        <td><?php echo $p->nomeUsuario; ?></td>
                        <td><?php echo $p->user; ?></td>
                        <td><?php echo $p->perfilAcesso; ?></td>
                        <td>
                            <a  href="<?php echo base_url() . 'usuario/editar/' . $p->idusuario; ?>">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            |
                            <a  href="<?php echo base_url() . 'usuario/excluir/' . $p->idusuario; ?>">
                                <i class="glyphicon glyphicon-trash"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<script>
    $(document).ready(function () {
        $('#table_id').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>