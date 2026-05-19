<?php
class Docente
{
    public ?int $id_docente = null;
    public string $nombres = '';
    public string $apellidos = '';
    public string $dni = '';
    public string $correo = '';
    public string $telefono = '';
    public string $especialidad = '';
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_docente = $data['id_docente'] ?? null;
        $this->nombres = $data['nombres'] ?? '';
        $this->apellidos = $data['apellidos'] ?? '';
        $this->dni = $data['dni'] ?? '';
        $this->correo = $data['correo'] ?? '';
        $this->telefono = $data['telefono'] ?? '';
        $this->especialidad = $data['especialidad'] ?? '';
        $this->estado = $data['estado'] ?? '';
    }
}
