<?php

namespace Spatie\Mailcoach\Domain\TransactionalMail\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Mailcoach\Domain\Shared\Traits\UsesMailcoachModels;

class TransactionalMailOpen extends Model
{
    use HasFactory;
    use UsesMailcoachModels;

    public $table = 'mailcoach_transactional_mail_opens';

    protected $guarded = [];

    public function send(): BelongsTo
    {
        return $this->belongsTo($this->getSendClass(), 'send_id');
    }
}
