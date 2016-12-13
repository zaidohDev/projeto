 
<li class="<?php echo e(Request::is('home*') ? 'active' : ''); ?>">

   <a href="<?php echo url('/painel'); ?>"><div class="efeito"><i class="fa fa-dashboard fa-2x"> </i><span>Painel</span></div></a>
   <a class="" href="<?php echo url('/comunicados'); ?>"><div class="efeito"><i class="fa fa-bullhorn fa-2x"> </i><span>Comunicados</span></div></a>
   <a class="" href="<?php echo url('/eventos'); ?>"><div class="efeito"><i class="fa fa-calendar-o fa-2x"> </i><span>Eventos</span></div></a>
   <a class="" href="<?php echo url('/atividades'); ?>"><div class="efeito"><i class="fa fa-pencil fa-2x"> </i><span>Atividades</span></div></a>
   <a class="" href="<?php echo url('/mensagens'); ?>"><div class="efeito"><i class="fa fa-comments-o fa-2x"> </i><span>Mensagens</span></div></a>
   <a class="" href="<?php echo url('/planos'); ?>"><div class="efeito"><i class="fa fa-book fa-2x"></i><span>Planos de Aula</span></div></a>
   <a class="" href="<?php echo url('/site'); ?>"><div class="efeito"><i class="fa fa-home fa-2x"> </i><span>Site</span></div></a>
   <a class="" href="<?php echo url('/central'); ?>"><div class="efeito"><i class="fa fa-bell fa-2x"> </i><span>Central</span></div></a>
																											
</li>

<a class="" href="<?php echo url('/bairros'); ?>"></a>

<style>
ul li {
  background-color:#35495d;
}
span{
	padding: 2px 2px 2px 5px;
	color: #ffffff;
	font-size: 15px;
	/* border-left: 1px solid #ffffff; */
	margin-left: 10px;
}

.efeito:hover{
  background:rgba(0, 0, 0, 0) url("//ssl.gstatic.com/ui/v1/icons/mail/grippy_large.png") no-repeat scroll 2px 90%;

}

.fa:hover{
    color: #e74c3c;
} 
</style>









