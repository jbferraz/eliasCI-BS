<div class="row">
    <div class="col-lg-3 col-md-3 col-3"></div>
    <div class="col-lg-6 col-md-6 col-6">
        <h1 class="jumbotron-heading">Editar Aluno</h1><p></p>
        <?php echo form_open('alunos/atualizar'); ?>
        <div class="form-group">
            <input type="text" class="hide form-control form-control-lg" 
                   name="id" placeholder="id" value="<?php echo $alunosEditar[0]->id; ?>"/>
            <input type="text" class="form-control form-control-lg" 
                   name="nome" placeholder="Nome" value="<?php echo $alunosEditar[0]->nome; ?>"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="rg" placeholder="RG" value="<?php echo $alunosEditar[0]->rg; ?>"/>
        </div>
        <div class="form-group">
            <input type="number" class="form-control form-control-lg" 
                   name="idade" placeholder="Idade" value="<?php echo $alunosEditar[0]->idade; ?>"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="endereco" placeholder="Endereço" value="<?php echo $alunosEditar[0]->endereco; ?>"/>
        </div>
        <div class="form-group">
            <input type="text" class="form-control form-control-lg" 
                   name="turma" placeholder="Turma" value="<?php echo $alunosEditar[0]->turma; ?>"/>
        </div>
        <div class="form-group">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio1" value="Feminino" 
                    <?php if ($alunosEditar[0]->sexo === "FEMININO") echo set_radio('sexo', '1', TRUE); ?> >
                <label class="form-check-label" for="inlineRadio1">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="inlineRadio2" value="Masculino" 
                    <?php if ($alunosEditar[0]->sexo === "MASCULINO") echo set_radio('sexo', '1', TRUE); ?>>
                <label class="form-check-label" for="inlineRadio2">Masculino</label>
            </div>
        </div>

        <input type="submit" name="salvar" value="Salvar" 
               class="btn btn-success"/>

        <input type="reset" class="btn btn-danger"/>

        <a class="btn btn-primary" href="<?php base_url(); ?>../../alunos" id="cancelar">Cancelar</a>
           <?php form_close(); ?> 
    </div>
    <div class="col-lg-3 col-md-3 col-3"></div>
</div>
