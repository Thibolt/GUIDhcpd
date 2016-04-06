{include file='header.tpl'}
{include file='navbar.tpl'}
<!-- Begin page content -->
<div class="container">

    {if $serviceStatus != '* apache2 is running'}
    <div class="panel panel-danger">
    {else}
        <div class="panel panel-success">
    {/if}
        <div class="panel-heading">
            <span class="glyphicon glyphicon-ok" aria-hidden="true"></span> {$serviceStatus}
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            Scope list
        </div>
        <div class="panel-body">

        </div>
    </div>
</div>
{include file='footer.tpl'}
