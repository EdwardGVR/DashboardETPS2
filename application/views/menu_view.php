<div class="menu">
    <div class="header">
        <span>Control de insumos en centros t&eacute;cnicos</span>
        <div class="header-options">
            <div class="username">
                <span><?= $usuario ?></span>
            </div>
            <div class="logout">
                <a href="<?= base_url() ?>Login/logout"><i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>
    </div>

    <div class="options">
        <div class="links">
            <a href="<?= base_url() ?>InversionInicial" class="link">Inversi&oacute;n Inicial</a>
            <a href="<?= base_url() ?>ControlConsumo" class="link">Control de Consumo</a>
            <a href="<?= base_url() ?>PedidosProveedores" class="link">Pedidos a proveedores</a>
        </div>
    </div>
</div>