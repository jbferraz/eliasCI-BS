<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Cadastro de Aluno</h1><p></p>
        <?php echo form_open('alunos/inserir'); ?>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="nome" placeholder="Nome"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="rg" placeholder="RG"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" 
                   name="idade" placeholder="Idade"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="endereco" placeholder="Endereço"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="turma" placeholder="Turma"/>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Feminino">
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Masculino">
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
        </div>

        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>home" id="cancelar">Cancelar</a>
        <a class="btn btn-info" id="btn-lista" href="#">Listar Contatos</a>
        <?php form_close(); ?> 
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
<div id="div-lista" class="hide row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <p></p>
        <h1 class="jumbotron-heading">Lista de Aluno</h1><p></p>
        <table id="table_id" 
               class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th >Nome</th>
                    <th >RG</th>
                    <th >Turma</th>
                    <th >Idade</th>
                    <th >Sexo</th>
                    <th >Funções</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $p): ?>
                    <tr>
                        <td><?php echo $p->nome; ?></td>
                        <td><?php echo $p->rg; ?></td>
                        <td><?php echo $p->turma; ?></td>
                        <td><?php echo $p->idade; ?></td>
                        <td><?php echo $p->sexo; ?></td>
                        <td>
                            <a  href="<?php echo base_url() . 'alunos/editar/' . $p->id; ?>">
                                <i class="glyphicon glyphicon-edit"></i>
                            </a>
                            |
                            <a  href="<?php echo base_url() . 'alunos/excluir/' . $p->id; ?>">
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
    $("#btn-lista").click(function () {
        $("#div-lista").toggleClass("hide");
    });
    
    $(document).ready(function () {
        $('#table_id').DataTable({
            language: {
                "url": "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/Portuguese-Brasil.json"
            }
        });
    });
</script>