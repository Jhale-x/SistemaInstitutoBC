<?php
class Nota
{
    public ?int $id_nota = null;
    public string $alumno = '';
    public string $curso = '';
    public ?float $tarea = null;
    public ?float $examen = null;
    public ?float $promedio = null;
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_nota = $data['id_nota'] ?? null;
        $this->alumno = $data['alumno'] ?? '';
        $this->curso = $data['curso'] ?? '';
        $this->tarea = $data['tarea'] ?? null;
        $this->examen = $data['examen'] ?? null;
        $this->promedio = $data['promedio'] ?? null;
        $this->estado = $data['estado'] ?? '';
    }
}
