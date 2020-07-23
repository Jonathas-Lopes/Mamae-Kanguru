<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EmailsAdmin extends Mailable
{
    use Queueable, SerializesModels;

    // 2. esse objeto precisa virar um atributo da classe
    private $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    // 1. precisamos apontar o tipo de dado, por isso o stdClass aqui no __construct
    // mas, deveríamos passar o nosso modelo usuário pegando do namespace app
    // daí adicionaria automaticamente a dependência lá em cima
    public function __construct(\stdClass $user) 
    {
        // 3. O atributo user dessa classe é igual ao parâmetro que estou passando
        // através da injeção de dependência
        $this->user = $user;
        // 4. depois disso, eu consigo usar o endereçamento do email com esses atributos
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $this->from('admin@gmail.com');
        $this->subject('Cadastro na plataforma UNIU');
        $this->to($this->user->email, $this->user->name);
        return $this->view('emails.email-cadastro', [
            'user' => $this->user
        ]);
    }
}
