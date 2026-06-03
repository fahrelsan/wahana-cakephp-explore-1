<h1>Login</h1>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <?= $this->Form->control('email', ['type' => 'email']) ?>
    <?= $this->Form->control('password') ?>
    <?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>
<?= $this->Html->link('Register', ['action' => 'add']) ?>