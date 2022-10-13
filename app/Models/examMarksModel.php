<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\examMarksModel
 *
 * @property int $id
 * @property string $name
 * @property string $marks
 * @property string $roll
 * @property string $Grade
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel whereGrade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel whereMarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|examMarksModel whereRoll($value)
 * @mixin \Eloquent
 */
class examMarksModel extends Model
{
    protected $table = 'exam_marks';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;
}
