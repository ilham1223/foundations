<div id="DirectorsAdminView">
    <h3><?php echo __('View Directors', true); ?></h3><hr />
    <div class="col-md-12">
        <div class="col-md-2">Foundations</div>
        <div class="col-md-9">&nbsp;<?php
if (empty($this->data['Foundation']['id'])) {
    echo '--';
} else {
    echo $this->Html->link($this->data['Foundation']['id'], array(
        'controller' => 'foundations',
        'action' => 'view',
        $this->data['Foundation']['id']
    ));
}
?></div>

        <div class="col-md-2">Name</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Director']['name']) {

                echo $this->data['Director']['name'];
            }
?>&nbsp;
        </div>
        <div class="col-md-2">Title</div>
        <div class="col-md-9">&nbsp;<?php
            if ($this->data['Director']['title']) {

                echo $this->data['Director']['title'];
            }
?>&nbsp;
        </div>
    </div>
    <hr />
    <div class="actions">
        <ul>
            <li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Director.id')), null, __('Delete the item, sure?', true)); ?></li>
            <li><?php echo $this->Html->link(__('Directors List', true), array('action' => 'index')); ?> </li>
        </ul>
    </div>
    <div id="DirectorsAdminViewPanel"></div>
<?php
echo $this->Html->scriptBlock('

');
?>
    <script type="text/javascript">
        //<![CDATA[
        $(function() {
            $('a.DirectorsAdminViewControl').click(function() {
                $('#DirectorsAdminViewPanel').parent().load(this.href);
                return false;
            });
        });
        //]]>
    </script>
</div>