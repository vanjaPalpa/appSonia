# appSonia

Application creant un Identiter unique des citoyens tout en visant a certifier les documents d'etat civil par un sceau digitale et un signature numerique.
l'application garantie la verification, authenticite des citoyen et des documents d'etat civil

TODO:

api : endpoints -> qui gere les Citoyens (s'enregitrer et se connecter a son compte)
		-> qui gere le compte du Citoyen ( formulaire ID, profile ID, fomulaire de document,liste statuts des docmuments )
		-> qui gere les responsable administratives ( connexion, gestion des responsables)
		-> qui gere verification ID des citoyens
		-> qui gere les documents Citoyens ( liste les demandes, creer une nouvelle modele de documents, signer ou legalise un document)
		-> qui verifie l'authenticiter ID Citoyen ou un documents d'etat civil
		
web_front :page -> connexion et d'enregistrements des citoyens
		-> gestion du compte citoyens
		-> connexion et administration des responsables (gestion des roles et permissions des responsable sur les documents)
		-> verification de ID des citoyens 
		-> legalisation ou signatures des documents, creer un modeles de documents
		-> verification ID d'un Citoyens ou d'un document d'etat civil