<?php
class Asistencia
{
    public ?int $id_asistencia = null;
    public string $alumno = '';
    public string $curso = '';
    public ?string $fecha = null;
    public string $estado = '';
    public string $observacion = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_asistencia = $data['id_asistencia'] ?? null;
        $this->alumno = $data['alumno'] ?? '';
        $this->curso = $data['curso'] ?? '';
        $this->fecha = $data['fecha'] ?? null;
        $this->estado = $data['estado'] ?? '';
        $this->observacion = $data['observacion'] ?? '';
    }
}
