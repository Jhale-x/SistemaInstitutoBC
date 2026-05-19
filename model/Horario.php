<?php
class Horario
{
    public ?int $id_horario = null;
    public string $curso = '';
    public string $docente = '';
    public string $salon = '';
    public string $dia = '';
    public string $hora_inicio = '';
    public string $hora_fin = '';
    public string $estado = '';

    public function __construct($data = [])
    {
        if (!is_array($data)) {
            $data = [];
        }

        $this->id_horario = $data['id_horario'] ?? null;
        $this->curso = $data['curso'] ?? '';
        $this->docente = $data['docente'] ?? '';
        $this->salon = $data['salon'] ?? '';
        $this->dia = $data['dia'] ?? '';
        $this->hora_inicio = $data['hora_inicio'] ?? '';
        $this->hora_fin = $data['hora_fin'] ?? '';
        $this->estado = $data['estado'] ?? '';
    }
}
