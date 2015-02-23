/**
* オブジェクトをキーでソートする
*
* @param Object obj ソートするオブジェクト
* @return Object キーでソートされたオブジェクト
*/
function objKeySort(obj){

	var keyArr = [];

	for(var key in obj){
		keyArr.push(key);
	}

	keyArr.sort();

	var retObj = {};

	for(var i=0; i<keyArr.length; i++){
		retObj[keyArr[i]] = obj[keyArr[i]];
	}

	return retObj;
}
