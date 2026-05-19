<?php
class Usuario
{
    public ?int $id_usuario = null;
    public string $nombre = '';
    public string $correo = '';
    public string $password = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_usuario = $data['id_usuario'] ?? null;
        $this->nombre = $data['nombre'] ?? '';
        $this->correo = $data['correo'] ?? '';
        $this->password = $data['password'] ?? '';
    }
}
