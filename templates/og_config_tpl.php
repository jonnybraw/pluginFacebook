<div class="wrap">
<h2>Detalhes de Quem Instalou o Plug-in</h2>
<form method="post" action="options.php">
<?php settings_fields( 'plugin-settings-group' ); ?>
<?php do_settings_sections( 'plugin-settings-group' ); ?>
<table class="form-table">
<tr valign="top">
<th scope="row">Nome</th>
<td><input type="text" name="nome_funcionario" 
value="<?php echo esc_attr( get_option('nome_funcionario') ); ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">Telefone</th>
<td><input type="text" name="telefone_funcionario" 
value="<?php echo esc_attr( get_option('telefone_funcionario') ); ?>" /></td>
</tr>
<tr valign="top">
<th scope="row">E-mail</th>
<td><input type="text" name="email_funcionario" 
value="<?php echo esc_attr( get_option('email_funcionario') ); ?>" /></td>
</tr>
</table>
<?php submit_button(); ?>
</form>
</div>