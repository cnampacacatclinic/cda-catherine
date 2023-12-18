<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

class ConnexionAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';

    private UrlGeneratorInterface $urlGenerator;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }


    public function authenticate(Request $request): Passport
    {
        $email = $request->request->get('email', '');

        $request->getSession()->set(Security::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->request->get('password', '')),
            [
                new CsrfTokenBadge('authenticate', $request->request->get('_csrf_token')),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }
        //Si on reçoit en get un lien on le conserve dans une variable
        $_REQUEST['a'] = empty($_REQUEST['a']) ? null : $_REQUEST['a'];
        
        $_REQUEST['e'] = empty($_REQUEST['e']) ? null : $_REQUEST['e'];
       
        //si on veut s'inscrire à une evenement
        if($_REQUEST['e']!=null){
                return new RedirectResponse($this->urlGenerator->generate('app_event_page', ['e' => $_REQUEST['e']]));//envoi de $_REQUEST['e']
        }//si on veut déposer un commentaire
        elseif ($_REQUEST['a']!=null){
                return new RedirectResponse($this->urlGenerator->generate('app_article', ['a' => $_REQUEST['a']]));//envoi de $_REQUEST['a']
        }else{
            //on est redirigé vers le profil utilisateur
            return new RedirectResponse($this->urlGenerator->generate('app_user'));
            //throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
        }
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
