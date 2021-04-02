<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NouveauProduitAjoutee extends Mailable
{
    use Queueable, SerializesModels;
    public $produit;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($produit)
    {
        $this->produit = $produit;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Un noveau Produit vient d'etre ajouté sur votre plateforme")->markdown('emails.produits.nouveau-produit-ajoute');
    }
}
