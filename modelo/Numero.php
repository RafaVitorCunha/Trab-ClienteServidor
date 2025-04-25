<?php
    class Numero {
        private string $nome;
        private string $link; //Da imagem.

        public function getNome(): string
        {
                return $this->nome;
        }

        public function setNome(string $nome): self
        {
                $this->nome = $nome;
                return $this;
        }

        public function getLink(): string
        {
                return $this->link;
        }

        public function setLink(string $link): self
        {
                $this->link = $link;
                return $this;
        }
    }