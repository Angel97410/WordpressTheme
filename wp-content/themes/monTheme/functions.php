<?php 
/**
 * Désactiver l'éditeur Gutenberg et utiliser l'éditeur classique
 *
 * Cette fonction utilise le filtre 'use_block_editor_for_post' pour désactiver l'éditeur Gutenberg
 * et utiliser l'éditeur classique à la place pour tous les types de contenu.
 */

// Ajoute un filtre pour modifier l'utilisation de l'éditeur par blocs
add_filter('use_block_editor_for_post', 'desactiver_gutenberg');

/**
 * Fonction callback pour désactiver l'éditeur Gutenberg
 *
 * @param bool $use_block_editor Valeur actuelle de l'utilisation de l'éditeur par blocs.
 * @return bool Retourne false pour désactiver l'éditeur par blocs.
 */
function desactiver_gutenberg($use_block_editor) {
    // Retourne false pour désactiver l'éditeur par blocs
    return false;
}
