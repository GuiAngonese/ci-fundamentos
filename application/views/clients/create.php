<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('clients/create') ?>

	<label for="nome">Nome</label> 
	<input type="input" name="nome" /><br />

	<label for="cidade">Cidade</label>
	<input type="input" name="cidade" /><br />
	
	<input type="submit" name="submit" value="Create new item" /> 

</form>