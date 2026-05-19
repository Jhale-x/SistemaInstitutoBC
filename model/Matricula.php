<?php
class Matricula
{
    public ?int $id_matricula = null;
    public string $alumno = '';
    public string $carrera = '';
    public string $curso = '';
    public string $ciclo = '';
    public ?string $fecha = null;
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_matricula = $data['id_matricula'] ?? null;
        $this->alumno = $data['alumno'] ?? '';
        $this->carrera = $data['carrera'] ?? '';
        $this->curso = $data['curso'] ?? '';
        $this->ciclo = $data['ciclo'] ?? '';
        $this->fecha = $data['fecha'] ?? null;
        $this->estado = $data['estado'] ?? '';
    }
}
