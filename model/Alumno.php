<?php
class Alumno
{
    public ?int $id_alumno = null;
    public string $nombres = '';
    public string $apellidos = '';
    public string $dni = '';
    public string $correo = '';
    public string $telefono = '';
    public string $carrera = '';
    public string $ciclo = '';
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_alumno = $data['id_alumno'] ?? null;
        $this->nombres = $data['nombres'] ?? '';
        $this->apellidos = $data['apellidos'] ?? '';
        $this->dni = $data['dni'] ?? '';
        $this->correo = $data['correo'] ?? '';
        $this->telefono = $data['telefono'] ?? '';
        $this->carrera = $data['carrera'] ?? '';
        $this->ciclo = $data['ciclo'] ?? '';
        $this->estado = $data['estado'] ?? '';
    }
}
