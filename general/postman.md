const jsonRes = pm.response.json();
pm.globals.set('jwt', jsonRes.token);
